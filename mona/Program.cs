using System;
using System.Xml.Serialization;

namespace mona
{
    class Program
    {
        static void Main(string[] args)
        {
            string choice;
            do
            {
                Console.WriteLine("Enter your Option : ");
                Console.WriteLine("1. Enter Dimension of the triangle\n2. Exit\n");
                choice = Console.ReadLine();
                switch (choice)
                {
                    case "1":
                        Console.Write("Side A :");
                        var side1 = Convert.ToInt32(Console.ReadLine());
                        Console.Write("Side B :");
                        var side2 = Convert.ToInt32(Console.ReadLine());
                        Console.Write("Side C :");
                        var side3 = Convert.ToInt32(Console.ReadLine());
                        var Result = TriangleSolver.Analyze(side1, side2, side3);
                        Console.WriteLine(Result);
                        break;
                    case "2":
                        Environment.Exit(1);
                        break;
                }
            } while (choice != "2");
            Console.ReadKey();
        }
    }
    public static class TriangleSolver
    {
        public static string Analyze(int sideA, int sideB, int sideC)
        {
            if (sideA + sideB > sideC && sideB + sideC > sideA && sideC + sideA > sideB)
            {
                Console.WriteLine("\nYes, It forms a Triangle...");
                if (sideA == sideB && sideB == sideC && sideC == sideA)
                {
                    return "\nIt is an Equilateral Triangle\n";
                }
                if (sideA == sideB || sideB == sideC || sideC == sideA)
                {
                    return "\nIt is an Isosceles Triangle\n";
                }
                return "\nIt is an Scalene Triangle\n";
            }
            else
            {
                return "\nIt is not a triangle\n";
            }

        }
    }
}
