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
void binprintf(byte IP)											//==============PRINT AS BINARY================
{
    byte aux=1<<((sizeof(byte)<<3)-1);					//Change the pointer
    while(aux) {												//While aux is true
        printf("%d ", (IP&aux ? 1 : 0));							//Print it
        aux >>= 1;												//Move it baby
    }
}

uint  crc8 (byte data[], int size)
{
   int i=1,j=0;
   byte unbyte, temp=0;
   byte crc = data[0];
   byte poly=0x07;
   unbyte=data[0];
   while (i<size)
   {
   		if(unbyte&128){
   			//printf("Es uno: \n");
   			if(j<8){

   				unbyte<<=1;
	   			if(data[i]&128){
		   					unbyte|=1;
		   				}
		   				else{
		   					unbyte|=0;
		   				}
		   				//printf("CRC %#02x\n",unbyte);

	   			data[i]<<=1;
	   			j++;
	   			unbyte=unbyte^=poly;
	   			//printf("1XOR %#02x\n",unbyte);

	   			
   			}
   			else{															//Siguiente bloque de datos
   						
		   				i++;												//Actualizame el dato
   						j=0;												//Resetea
   						if(!(i==size)){										//Si ya no hay datos

		   							unbyte<<=1;
		   							//printf("CRC %#02x\n",unbyte);

				   						if(data[i]&128){
						   					unbyte|=1;
						   					data[i]<<=1;
								   			j++;
								   			unbyte=unbyte^=poly;
				   						}
				   						else if(!(data[i]&128)){
						   					unbyte|=0;
						   					data[i]<<=1;
								   			j++;
						   					unbyte=unbyte^=poly;
						   		}
						   			//printf("XOR %#02x\n",unbyte);

						   	}
						   	

   			}
   		}
   		else {
   			//printf("Es un cero\n");
		   		if(j<8){
		   				unbyte<<=1;
		   				//printf("CRC %#02x\n",unbyte);

		   				if(data[i]&128){
		   					unbyte|=1;
		   				}
		   				else{
		   					unbyte|=0;
		   				}
			   			data[i]<<=1;
			   			j++;
		   				//printf("crc %#02x\n",unbyte);

			   		}
			   	else{
		   				i++;
   						j=0;
   						if(!(i==size)){									//Si ya no hay datos
   							unbyte<<=1;
		   				//printf("CRC %#02x\n",unbyte);
				   				if(data[i]&128){
				   					/*
						   					unbyte|=1;
						   					data[i]<<=1;
								   			j++;
								   			unbyte=unbyte^=poly;
						   				}
						   		else if(!(data[i]&128)){
						   					unbyte|=0;
						   					data[i]<<=1;
								   			j++;
								   			unbyte=unbyte^=poly;
						   				}
		   				printf("xor %#02x\n",unbyte);*/
				   					unbyte|=1;
		   				}
		   				else{
		   					unbyte|=0;
		   				}
			   			data[i]<<=1;
			   			j++;
		   				//printf(" %#02x\n",unbyte);

				   		}
			   		}
   }  
}
   return (uint)unbyte;
}
int main(int argc, char const *argv[]) {
    
    int NBytes = (argc - 1) / 8;

    byte* Trama = malloc(sizeof(byte) * NBytes);
    byte* Crc = malloc(sizeof(byte) * NBytes);

    for (int i = 0; i < NBytes; ++i) {
        Trama[i] = 0;
        for (int j = 0; j < 8; ++j) {
            int Bit = argv[(i * 8) + j + 1][0] - '0';
            Trama[i] = (Trama[i] << 1) | (Bit); 
        }
    }

    for (int i = 0; i < NBytes; ++i) {
        //printf("Parameter %i is %hhu\n", i, Trama[i]);
        Crc[i]=Trama[i];
    }
    byte size=(Trama[0]&63)*2;

    binprintf(crc8(&Crc[0],size+4));


    return 0;
}