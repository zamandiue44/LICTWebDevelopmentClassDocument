#include<stdio.h>
#include<conio.h>

int main()
{
    int i,j,k=0;
    int n;
    printf("Enter Number: ");
    scanf("%d", &n);
    for(i=1;i<=n;i++)
    {
        for(j=1;j<=i;j++)
        {
            k=i+j+1;
            k=k%2;
            printf("%d ",k);
        }
        printf("\n");
    }


}
