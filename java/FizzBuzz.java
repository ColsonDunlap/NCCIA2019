/*
FizzBuzz Problem:

Write a program that prints the numbers from 1 to 100.
But for multiples of three print “Fizz” instead of the number and for the multiples of five print “Buzz”.
For numbers which are multiples of both three and five print “FizzBuzz”.

Command Line Instructions to Build and Run (if it's been a while since you've used the command line):
javac FizzBuzz.java
java FizzBuzz
*/

public class FizzBuzz
{
   public static void main(String[] args)
   {
      System.out.println("Here's the FizzBuzz Problem:");
      for(int i=1; i <=100; i++)
      {
         if(i%5 == 0 && i%3 == 0)//divisible by 3 and 5
         {
            System.out.println("FizzBuzz");
         }
         else if(i%3 ==0)//divisible by 3
         {
            System.out.println("Fizz");
         }
         else if(i%5 ==0)//divisible by 5
         {
            System.out.println("Buzz");
         }
         else
         {
            System.out.println(i);
         }
      }
   }
}