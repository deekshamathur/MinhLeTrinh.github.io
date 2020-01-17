int pin ;
int a = 7;
void setup() {
  for (pin= 9; pin<14; pin++){
    pinMode (pin, OUTPUT);
  }
    pin =8;
} 

void loop() {
if ( digitalRead(a) == HIGH){
  digitalWrite(pin, LOW);
  pin = pin +1;
 }
  if (pin == 14){
    pin = 9;
 }
  digitalWrite(pin, HIGH);
  delay(100);
}
  

  
