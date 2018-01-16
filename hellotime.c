//
#include<stdio.h>
#include <time.h>
intmain(){
	time t t = tme(NULL);
	struct tm tm = *localtime(&t);
	
	printf("now:%d-%d-%d-%d-%d-%d\n",
	tm.tm year + 1900, tm.tm mon + 1,
	tm.tm mday, tm.tm hour, tm.tm min, tm.tm sec);
}
