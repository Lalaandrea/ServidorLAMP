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

uint Crc=0;
uint Suma=0;
bool flag=true;
Twobytes Auxiliar=0;
void binprintf(Twobytes IP)											//==============PRINT AS BINARY================
{
    Twobytes aux=1<<((sizeof(Twobytes)<<3)-1);					//Change the pointer
    while(aux) {												//While aux is true
        printf("%d ", (IP&aux ? 1 : 0));							//Print it
        aux >>= 1;												//Move it baby
    }
}


Twobytes Checksum(byte uno, byte dos){
	Auxiliar=dos|(uno<<8);
	Suma+=Auxiliar;
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

    for (byte i = 0; i < (size+4); i+=2)
			{
				if ((size+4)<(i+1))
				{
					Checksum(0,Trama[i]);
				}
				else
				{
					Checksum(Trama[i],Trama[i+1]);
				}
			}

		Auxiliar=Suma>>16;
		Suma=Suma&0xFFFF;
		Suma+=Auxiliar;
		//printf("%#010x\n\n",(~Suma)&0xFFFF );

    binprintf((~Suma)&0xFFFF);


    return 0;
}