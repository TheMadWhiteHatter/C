\\
#include<stdio.h>
int square ( int v);

int main()
{
	int x, n;
	printf("n\Enter some number for finding a square \n");
	scanf ("%d" , &n) ;
	printf ( "\nSquare of the given nuber %d is %d", n, x);
	printf ("\n\n");
	return 0;
}

int square (int v )  // function definition
{
	int p ;
	 p = v * v ;
	 return ( p) ;
}
	
