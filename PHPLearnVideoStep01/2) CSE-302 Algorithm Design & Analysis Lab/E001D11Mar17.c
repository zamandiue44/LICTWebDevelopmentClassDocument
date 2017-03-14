//Date:11-03-17
#include<stdio.h>
#include<conio.h>
    void main()
    {
        int i,j,k=0;
        for(i=0;i<5;i++)
        {
            for(j=0;j<=i;j++)
            {
                k=k+1;
                printf("%d ",k);
            }

            printf("\n");
        }

        getch();
}
