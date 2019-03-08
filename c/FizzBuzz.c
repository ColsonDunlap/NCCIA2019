/*
FizzBuzz Problem:

Write a program that prints the numbers from 1 to 100.
But for multiples of three print “Fizz” instead of the number and for the multiples of five print “Buzz”.
For numbers which are multiples of both three and five print “FizzBuzz”.

Command Line Instructions to Build and Run (if it's been a while since you've used the command line):
gcc -std=c99 -o FizzBuzz FizzBuzz.c
./FizzBuzz
*/

#include <stdio.h>

int main()
{
   printf("Here's the FizzBuzz Problem:\n");
   for(int i=1; i <=100; i++)
   {
      if(i%5 == 0 && i%3 == 0)//divisible by 3 and 5
      {
         printf("FizzBuzz\n");
      }
      else if(i%3 ==0)//divisible by 3
      {
         printf("Fizz\n");
      }
      else if(i%5 ==0)//divisible by 5
      {
         printf("Buzz\n");
      }
      else
      {
         printf("%d\n",i);
      }
   }
   return 0;
}