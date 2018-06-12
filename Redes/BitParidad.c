/*########################	TRAMA ANALIZER	#######################
* @author Laura Andrea Morales
* @version 0.1
* @team CompilandoConocimiento
* @date 4/04/2018
* @compile "gcc -std=c11 Trama.c -o Trama"
* @run "./Trama "
*/

#include <stdlib.h>
#include <stdio.h>
#include<stdbool.h>
#include <string.h>

typedef unsigned int uint;
typedef unsigned char byte;
typedef unsigned short int Twobytes;
typedef unsigned long long int lint;

uint Aux=0;
uint Suma=0;
bool flag=true;
Twobytes Auxiliar=0;


byte CountBits(byte Num){
    byte aux=128;
    byte Number=0;
    for(byte j=0;j<8;j++){
        
            if (Num&(aux>>j))
                        Number++;
}
    
    return Number;
}

int main(int argc, char const *argv[]) {
    
    int NBytes = (argc - 1) / 8;

    byte* Trama = malloc(sizeof(byte) * NBytes);

    for (int i = 0; i < NBytes; ++i) {
        Trama[i] = 0;
        for (int j = 0; j < 8; ++j) {
            int Bit = argv[(i * 8) + j + 1][0] - '0';
            Trama[i] = (Trama[i] << 1) | (Bit); 
        }
    }

    //for (int i = 0; i < NBytes; ++i) {
        //printf("Parameter %i is %hhu\n", i, Trama[i]);
      //  Crc[i]=Trama[i];
    //}
    byte size=(Trama[0]&63)*2;

    

    if(((Trama[size+3]>>1)&0b00000111)==1){
        
        //printf("Bit paridad impar\n");

        for (byte i = 0; i <= size+3; ++i)
            Aux=Aux+CountBits(Trama[i]);
        
        //printf("Numero de unos: %d\n\n",Aux );

        if (Aux&1)
            //printf("Bien: el número de bits es impar\n");
            printf("0 ");

        else    
            //printf("Trama Dañada: el número de bits es par\n");
            printf("1 ");
        
    }
    else if (((Trama[size+3]>>1)&0b00000111)==0)
    {
        

        //printf("\nBit paridad Par\n");
        for (byte i = 0; i <= size+3; ++i)
        {
            Aux=Aux+CountBits(Trama[i]);
        }
        //printf("Numero de unos: %d\n",Aux );
        if (Aux&1)
            //printf("Trama Dañada: el número de bits es Impar\n");
            printf("1 ");
        else
            //printf("Bien: el número de bits es par\n");
            printf("0 ");

        
    }


    return 0;
}