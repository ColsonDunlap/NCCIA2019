/*
Sample code to read the contents of a file containing information delimited by '||' and print out the information

Command Line Instructions to Build and Run (if it's been a while since you've used the command line):
g++ -o TopSongs TopSongs.cpp
./TopSongs
*/

#include <iostream>
#include <fstream>
#include <string>

using namespace std;

int main()
{
    ifstream fileReader;
    fileReader.open("../topSongs.txt");//open the file and process it - let's just pretend there's error checking

    if(fileReader)
    {
        string line, token;
        string delimiter = "||";
        int pos;
        while(getline(fileReader, line))//loop through the file and read it line by line
        {
            //I wish there was a standard implementation of a split function to use!!!
            pos = 0;
            while ((pos = line.find(delimiter)) != string::npos)
            {
                token = line.substr(0, pos);
                cout<<token<<endl;
                line.erase(0, pos + delimiter.length());
            }
            cout<<line<<endl
                      <<endl;
        }
        fileReader.close();//we're done!
    }
    else
    {
        cout<<"We've got a problem!"<<endl;
    }
    return 0;
}