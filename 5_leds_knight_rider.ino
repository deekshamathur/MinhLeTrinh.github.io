
int i;


void setup() {
 for(i=9;i<14;i++) {
  pinMode (i, OUTPUT);
 }
}

void loop() {
  for (i=9; i<14; i++) {
    digitalWrite(i, HIGH);
    delay(1000);
    digitalWrite(i, LOW);
    delay(1000);
  }
  for (i=14; i>9; i--){
    digitalWrite(i, HIGH);
    delay(1000);
    digitalWrite(i, LOW);
    delay(1000);
  }
}
