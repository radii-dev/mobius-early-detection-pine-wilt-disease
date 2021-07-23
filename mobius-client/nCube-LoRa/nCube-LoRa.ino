void setup() {
  Serial1.begin(115200); // opens serial port, sets data rate to 9600 bps
  pinMode(10, OUTPUT);
  pinMode(9, OUTPUT);
}

void loop() {
  // send data only when you receive data:
  while(!Serial1.available());
  // read the incoming byte:
  String incomingByte = Serial1.readStringUntil('\n');
  int first = incomingByte.indexOf(":");
  int second = incomingByte.indexOf(":", first + 1);
  int third = incomingByte.indexOf(":", second + 1);
  String incomingByte1 = incomingByte.substring(first + 1, second);
  String incomingByte2 = incomingByte.substring(third + 1, incomingByte.length());
  float incomingFloat = incomingByte2.toFloat();

  Serial.println(incomingByte);
  Serial.println(incomingByte1);
  Serial.println(incomingFloat);
  digitalWrite(10, LOW);
  digitalWrite(9, HIGH);
  delay(1000);
  digitalWrite(9, LOW);
}
