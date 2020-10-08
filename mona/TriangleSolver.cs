using System;
using System.Collections.Generic;
using System.Text;

namespace mona
{
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


