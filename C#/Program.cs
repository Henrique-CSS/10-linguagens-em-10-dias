using static System.Console;

string[] file = File.ReadAllLines("C:/<pathto>/test7.txt");

foreach(string line in file)
{
    foreach(char letter in line)
    {
         if (letter == 'T')
         {
                // do something
         }
    }
}
