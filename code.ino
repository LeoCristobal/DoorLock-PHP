#include <ESP8266WiFi.h>
#include <ESP8266WebServer.h>
#include <ESP8266HTTPClient.h>
#include <SPI.h>
#include <MFRC522.h>

#define SS_PIN D2      // SDA / SS connected to D2
#define RST_PIN D1     // RST connected to D1
#define ON_Board_LED 2 // On-board LED (D4)

MFRC522 mfrc522(SS_PIN, RST_PIN);

const char* ssid = "Alsan Air WiFi 4";
const char* password = "11122235122@kap1";

ESP8266WebServer server(80);

byte readcard[4];
char str[32] = "";
String StrUID;

void setup() {
  Serial.begin(115200);
  SPI.begin();
  mfrc522.PCD_Init();

  delay(500);

  WiFi.begin(ssid, password);
  pinMode(ON_Board_LED, OUTPUT);
  digitalWrite(ON_Board_LED, HIGH); // Turn off initially

  Serial.print(F("Connecting"));
  while (WiFi.status() != WL_CONNECTED) {
    Serial.print(F("."));
    digitalWrite(ON_Board_LED, LOW);
    delay(250);
    digitalWrite(ON_Board_LED, HIGH);
    delay(250);
  }

  digitalWrite(ON_Board_LED, HIGH); // Connected
  Serial.println();
  Serial.print(F("Successfully connected to: "));
  Serial.println(ssid);
  Serial.print(F("IP address: "));
  Serial.println(WiFi.localIP());
  Serial.println(F("Please tag a card or keychain to see the UID!"));
}

void loop() {
  if (getid()) {
    digitalWrite(ON_Board_LED, LOW);

    WiFiClient client;
    HTTPClient http;

    String postData = "UIDresult=" + StrUID;

    http.begin(client, "http://192.168.254.187/NodeMCU-and-RFID-RC522-IoT-Projects/getUID.php");
    http.addHeader("Content-Type", "application/x-www-form-urlencoded");

    int httpCode = http.POST(postData);
    String payload = http.getString();

    Serial.println(StrUID);
    Serial.println(httpCode);
    Serial.println(payload);

    http.end();
    delay(1000);
    digitalWrite(ON_Board_LED, HIGH);
  }
}

bool getid() {
  if (!mfrc522.PICC_IsNewCardPresent() || !mfrc522.PICC_ReadCardSerial()) {
    return false;
  }

  Serial.print(F("THE UID OF THE SCANNED CARD IS: "));
  for (int i = 0; i < 4; i++) {
    readcard[i] = mfrc522.uid.uidByte[i];
  }

  array_to_string(readcard, 4, str);
  StrUID = str;
  Serial.println(StrUID);

  mfrc522.PICC_HaltA();
  return true;
}

void array_to_string(byte array[], unsigned int len, char buffer[]) {
  for (unsigned int i = 0; i < len; i++) {
    byte nib1 = (array[i] >> 4) & 0x0F;
    byte nib2 = (array[i] >> 0) & 0x0F;
    buffer[i * 2 + 0] = nib1 < 0xA ? '0' + nib1 : 'A' + nib1 - 0xA;
    buffer[i * 2 + 1] = nib2 < 0xA ? '0' + nib2 : 'A' + nib2 - 0xA;
  }
  buffer[len * 2] = '\0'; // Fix: correct string termination
}
