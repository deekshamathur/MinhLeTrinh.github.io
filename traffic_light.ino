
int redPin = 8;
int yellowPin = 9;
int greenPin = 10;
void setup() {
  pinMode(redPin, OUTPUT);
  pinMode(yellowPin, OUTPUT);
  pinMode(greenPin, OUTPUT);
}
void loop() {
    digitalWrite(redPin, HIGH);
    delay(2000);
    digitalWrite(redPin, LOW);
    digitalWrite(yellowPin, HIGH); 
    delay(2000); 
    digitalWrite(yellowPin, LOW);
    digitalWrite(greenPin, HIGH); 
    delay(2000); 
    digitalWrite(greenPin, LOW);
}
  
  

