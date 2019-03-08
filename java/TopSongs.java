/*
Sample code to read the contents of a file containing information delimited by '||' and print out the information

Command Line Instructions to Build and Run (if it's been a while since you've used the command line):
javac TopSongs.java
java TopSongs
*/

import java.util.Scanner;
import java.io.File;
import java.io.IOException;

public class TopSongs
{
   public static void main(String[] args)
   {
       try
       {
            Scanner songFile = new Scanner(new File("../topSongs.txt"));//open the file for reading via a Scanner

            while(songFile.hasNext())
            {
                String[] tokens = songFile.nextLine().split("\\|\\|");//split each line into tokens on "||""

                for(String token : tokens)
                {
                    System.out.println(token);//print each token on it's own line
                }
                System.out.println();//print a blank line between records in the file
            }

            songFile.close();//we're done!
       }
       catch(IOException e)
       {
           System.out.println("Error: " + e.getMessage());
       }
   }
}