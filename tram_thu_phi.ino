#include <Servo.h>
#include <LiquidCrystal.h>
int rs = 8, e = 9, d4 = 10, d5 = 11, d6 = 12, d7 = 13;
LiquidCrystal lcd(rs, e, d4, d5, d6, d7);
Servo DCservo;
int chan_dongco = 6;
int denxanh = 4;
int dendo = 5;
int i;
bool doc2,doc3;
void setup() {
  // put your setup code here, to run once:
lcd.begin(16, 2);
DCservo.attach(chan_dongco);
pinMode(2,INPUT);
pinMode(3,INPUT);
pinMode(4,INPUT);
pinMode(5,INPUT);
DCservo.write(0);
digitalWrite(dendo,1);
digitalWrite(denxanh,0);
lcd.setCursor(0,0);
lcd.print("   TRAM THU PHI");
lcd.setCursor(0,1);
lcd.print("QUY KHACH MUA VE");
}
void loop() {
  // put your main code here, to run repeatedly:
doc2 = digitalRead(2);
doc3 = digitalRead(3);
if(doc2==0)
{
  digitalWrite(dendo,0);
  lcd.setCursor(0,1);
  lcd.print("QUY KHACH DOI    ");
  for(i=0;i<=90;i=i+10)
  {
    DCservo.write(i);
    delay(250);
    digitalWrite(denxanh,1);
    delay(250);
    digitalWrite(denxanh,0);
    DCservo.write(90);
    digitalWrite(denxanh,1);
    lcd.setCursor(0,1);
    lcd.print("MOI QUY KHACH DI   ");
  }
  if(doc3==0)
  {
    digitalWrite(denxanh,0);
    digitalWrite(dendo,1);
    lcd.setCursor(0,1);
    lcd.print("QUY KHACH MUA VE");
    for(i=90;i>0;i=i-10)
    {
      DCservo.write(i);
      delay(100);
    }
    DCservo.write(0);
    }
  }
}
