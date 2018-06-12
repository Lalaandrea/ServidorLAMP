

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

void binprintf(int IP)                                          //==============PRINT AS BINARY================
{
    unsigned int aux=1<<((sizeof(int)<<3)-1);                   //Change the pointer
    while(aux) {                                                //While aux is true
        printf("%d", (IP&aux ? 1 : 0));                         //Print it
        aux >>= 1;                                              //Move it baby
    }
}
//Usa 4 chars para crear un int metelo en un for del size of the trama
byte CountBits(byte Num){
    byte aux=128;
    byte Number=0;
    for(byte j=0;j<8;j++){
        
            if (Num&(aux>>j))
                        Number++;
    }
    
    return Number;
}


Twobytes Checksum(byte uno, byte dos){
    Auxiliar=dos|(uno<<8);
    Suma+=Auxiliar;
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
            else{                                                           //Siguiente bloque de datos
                        
                        i++;                                                //Actualizame el dato
                        j=0;                                                //Resetea
                        if(!(i==size)){                                     //Si ya no hay datos

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
                        if(!(i==size)){                                 //Si ya no hay datos
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

int main(int argc, char const *argv[])

{    int NBytes = (argc - 1) / 8;

    byte* T = malloc(sizeof(byte) * NBytes);
    byte* Tc = malloc(sizeof(byte) * NBytes);

    for (int i = 0; i < NBytes; ++i) {
        T[i] = 0;
        for (int j = 0; j < 8; ++j) {
            int Bit = argv[(i * 8) + j + 1][0] - '0';
            T[i] = (T[i] << 1) | (Bit); 
        }
    }
    for (int i = 0; i < NBytes; ++i) {
        //printf("Parameter %i is %hhu\n", i, Trama[i]);
        Tc[i]=T[i];
    }

    

    byte Languaje[4][10]={"Frances","Aleman","Ingles","Espanol"};
    byte Grupo[3][5]={"2CM8","3CM5","4CV7"};

    byte Enrutamiento[4][30]={"Estatico","","Dinamico Dijkstra","Dinamico Bellman Ford"};
    byte ControlF[4][20]={"Parar y Esperar","","Retrocder N","Rechazo Selectivo"};

    byte Medio[8][15]={"","WiFi","Infrarrojo","Bluetooth","Cable Coaxial","Par Trenzado","Fibra Optica","Telefono"};

    
    byte size=(T[0]&63)*2;
    
    byte Aux=0;

    
    uint Check=0;

	Check=Check|T[size+4]<<8;



	Check|=T[size+5];
    
    

    //********************  Some Info we wantto know ***************************************
    printf("<div>");
   
    printf("<div class='row'>");
    printf("<div class='col s12 m6'><h4 class='center teal-text text-lighten-2'>Idioma:</h4><h6 class='center teal-text'>%s</h6></div>",Languaje[T[0]>>6] );
    printf("<div class='col s12 m6'><h4 class='center teal-text text-lighten-2'>Size</h4><h6 class='center teal-text'>%hhu</h6></div> ",size+1 ); 

    printf("<div class='col s12 m6'><h4 class='center teal-text text-lighten-2'>Emisor</h4><h6 class='center teal-text'>Grupo: %s</h6></br><h6 class='center teal-text'>Usuario: %d</h6></div> ", Grupo[T[1]>>6],(T[1]&63));            //Languaje is in the 2 msb
    printf("<div class='col s12 m6'><h4 class='center teal-text text-lighten-2'>Receptor</h4><h6 class='center teal-text'>Grupo: %s</h6></br><h6 class='center teal-text'>Usuario: %d</h6></div> ",  Grupo[T[2]>>6],(T[2]&63));

    printf("</div>");

    //////////////////////////////////////////////////////////////////////////////////////////
    printf("<div class='row'>");
    printf("<div class='col s12 m12'><h4 class='center teal-text text-lighten-2'>Mensaje:</h4><h6 class='center teal-text'>" );


    for (byte i = 3; i <= 2+size; ++i)
    {
        printf("%c",T[i] );
    }
    printf("</h6></div>");
    printf("<div class='col s12 m6'><h4 class='center teal-text text-lighten-2'>Enrutamiento:</h4><h6 class='center teal-text'>%s</h6></div> ", Enrutamiento[T[size+3]>>6]);

    printf("<div class='col s12 m6'><h4 class='center teal-text text-lighten-2'>Control de Flujo:</h4><h6 class='center teal-text'>%s</h6></div>  ", ControlF[(T[size+3]>>4)&0b00000011] );
    
    

    if(((T[size+3]>>1)&0b00000111)==1){
    	printf("<div class='col s12 m6'><h4 class='center teal-text text-lighten-2'>Control de Error:</h4><h6 class='center teal-text'>Bit de Paridad Impar</h6> ");
        
        for (byte i = 0; i <= size+3; ++i)
            Aux=Aux+CountBits(T[i]);

        

        if (Aux&1)
            printf("<h6 class='center teal-text'>Trama Correcta</h6></div>\n");

        else    
             printf("<h6 class='center teal-text'>Trama Dañada</h6></div>\n");


         printf("<div class='col s12 m6'><h4 class='center teal-text text-lighten-2'>Código de linea:</h4> ");
         if (T[size+4]&1)
        {
        	printf("<h6 class='center teal-text'>Return 0</h6>\n");
        	
        }
        if (T[size+4]&2)
        {
        	printf("<h6 class='center teal-text'>No return 0</h6>\n");
        	
        }
        if (T[size+4]&4)
        {
        	printf("<h6 class='center teal-text'>Unipolar</h6>\n");
        	
        }
        if (T[size+4]&8)
        {
        	printf("<h6 class='center teal-text'>Polar</h6>\n");
        	
        }
        if (T[size+4]&16)
        {
        	printf("<h6 class='center teal-text'>AMI</h6>\n");
        	
        }
        if (T[size+4]&32)
        {
        	printf("<h6 class='center teal-text'>Pseudoternario</h6>\n");
        	
        }
        if (T[size+4]&64)
        {
        	printf("<h6 class='center teal-text'>Manchester</h6>\n");
        	
        }
        if (T[size+4]&128)
        {
        	printf("<h6 class='center teal-text'>Manchester Diferencial</h6>\n");
        	
        }
        printf("</div>");

        printf("<div class='col s12 m6'><h4 class='center teal-text text-lighten-2'>Medio:</h4> ");
        switch(T[size+5]>>5){
        case 1:
        printf("<h6 class='center teal-text'>Inalambrico:Wifi</h6>\n");
        break;
        case 2:
        printf("<h6 class='center teal-text'>Inalambrico:Infrarrojo</h6>\n");
        break;
        case 3:
        printf("<h6 class='center teal-text'>Inalambrico:Bluetooth</h6>\n");
        break;
        case 4:
        printf("<h6 class='center teal-text'>Alámbico: Coaxial</h6>\n");
        break;
        case 5:
        printf("<h6 class='center teal-text'>Alámbico: Par Trenzado</h6>\n");
        break;
        case 6:
        printf("<h6 class='center teal-text'>Alámbico: Fibra Optica</h6>\n");
        break;
        case 7:
        printf("<h6 class='center teal-text'>Alámbico: Telefónica</h6>\n");
        break;
        printf("</div>");
    	}
        
    }
    else if (((T[size+3]>>1)&0b00000111)==0)
    {
        

       printf("<div class='col s12 m6'><h4 class='center teal-text text-lighten-2'>Control de Error:</h4><h6 class='center teal-text'>Bit de Paridad Par</h6> ");
        for (byte i = 0; i <= size+3; ++i)
        {
            Aux=Aux+CountBits(T[i]);
        }
        //printf("Numero de unos: %d\n",Aux );

        if (Aux&1)
            printf("<h6 class='center teal-text'>Trama Dañada</h6></div>\n");
        else
           printf("<h6 class='center teal-text'>Trama Correcta</h6></div>\n");
       printf("<div class='col s12 m6'><h4 class='center teal-text text-lighten-2'>Código de linea:</h4> ");
       if (T[size+4]&1)
        {
        	printf("<h6 class='center teal-text'>Return 0</h6>\n");
        	
        }
        if (T[size+4]&2)
        {
        	printf("<h6 class='center teal-text'>No return 0</h6>\n");
        	
        }
        if (T[size+4]&4)
        {
        	printf("<h6 class='center teal-text'>Unipolar</h6>\n");
        	
        }
        if (T[size+4]&8)
        {
        	printf("<h6 class='center teal-text'>Polar</h6>\n");
        	
        }
        if (T[size+4]&16)
        {
        	printf("<h6 class='center teal-text'>AMI</h6>\n");
        	
        }
        if (T[size+4]&32)
        {
        	printf("<h6 class='center teal-text'>Pseudoternario</h6>\n");
        	
        }
        if (T[size+4]&64)
        {
        	printf("<h6 class='center teal-text'>Manchester</h6>\n");
        	
        }
        if (T[size+4]&128)
        {
        	printf("<h6 class='center teal-text'>Manchester Diferencial</h6>\n");
        	
        }
        printf("</div>");

        printf("<div class='col s12 m6'><h4 class='center teal-text text-lighten-2'>Medio:</h4> ");
        switch(T[size+5]>>5){
        case 1:
        printf("<h6 class='center teal-text'>Inalambrico:Wifi</h6>\n");
        break;
        case 2:
        printf("<h6 class='center teal-text'>Inalambrico:Infrarrojo</h6>\n");
        break;
        case 3:
        printf("<h6 class='center teal-text'>Inalambrico:Bluetooth</h6>\n");
        break;
        case 4:
        printf("<h6 class='center teal-text'>Alámbico: Coaxial</h6>\n");
        break;
        case 5:
        printf("<h6 class='center teal-text'>Alámbico: Par Trenzado</h6>\n");
        break;
        case 6:
        printf("<h6 class='center teal-text'>Alámbico: Fibra Optica</h6>\n");
        break;
        case 7:
        printf("<h6 class='center teal-text'>Alámbico: Telefónica</h6>\n");
        break;
        printf("</div>");
    	}

        
    }

    else if(((T[size+3]>>1)&0b00000111)==4){
    	 printf("<div class='col s12 m6'><h4 class='center teal-text text-lighten-2'>Control de Error:</h4><h6 class='center teal-text'>Checksum</h6> ");
        //printf("Checksum\n");
        for (byte i = 0; i < (size+4); i+=2)
            {
                if ((size+4)<(i+1))
                {
                    Checksum(0,T[i]);
                }
                else
                {
                    Checksum(T[i],T[i+1]);
                }
            }

        Auxiliar=Suma>>16;
        Suma=Suma&0xFFFF;
        Suma+=Auxiliar;
        //printf("%d\n\n",(~Suma)&0xFFFF );
        //printf("%d\n",Check );
        if (((~Suma)&0xFFFF)==Check)
        {

        	printf("<h6 class='center teal-text'>Trama Correcta</h6></div>\n");
        }
        else
        	printf("<h6 class='center teal-text'>Trama Dañada</h6></div>\n");


        printf("<div class='col s12 m6'><h4 class='center teal-text text-lighten-2'>Código de linea:</h4> ");
        if (T[size+6]&1)
        {
        	printf("<h6 class='center teal-text'>Return 0</h6>\n");
        	
        }
        if (T[size+6]&2)
        {
        	printf("<h6 class='center teal-text'>No return 0</h6>\n");
        	
        }
        if (T[size+6]&4)
        {
        	printf("<h6 class='center teal-text'>Unipolar</h6>\n");
        	
        }
        if (T[size+6]&8)
        {
        	printf("<h6 class='center teal-text'>Polar</h6>\n");
        	
        }
        if (T[size+6]&16)
        {
        	printf("<h6 class='center teal-text'>AMI</h6>\n");
        	
        }
        if (T[size+6]&32)
        {
        	printf("<h6 class='center teal-text'>Pseudoternario</h6>\n");
        	
        }
        if (T[size+6]&64)
        {
        	printf("<h6 class='center teal-text'>Manchester</h6>\n");
        	
        }
        if (T[size+6]&128)
        {
        	printf("<h6 class='center teal-text'>Manchester Diferencial</h6>\n");
        	
        }
        printf("</div>");

        printf("<div class='col s12 m6'><h4 class='center teal-text text-lighten-2'>Medio:</h4> ");
        switch(T[size+7]>>5){
        case 1:
        printf("<h6 class='center teal-text'>Inalambrico:Wifi</h6>\n");
        break;
        case 2:
        printf("<h6 class='center teal-text'>Inalambrico:Infrarrojo</h6>\n");
        break;
        case 3:
        printf("<h6 class='center teal-text'>Inalambrico:Bluetooth</h6>\n");
        break;
        case 4:
        printf("<h6 class='center teal-text'>Alámbico: Coaxial</h6>\n");
        break;
        case 5:
        printf("<h6 class='center teal-text'>Alámbico: Par Trenzado</h6>\n");
        break;
        case 6:
        printf("<h6 class='center teal-text'>Alámbico: Fibra Optica</h6>\n");
        break;
        case 7:
        printf("<h6 class='center teal-text'>Alámbico: Telefónica</h6>\n");
        break;
        printf("</div>");
    	}


    }
    else if(((T[size+3]>>1)&0b00000111)==2){
    	printf("<div class='col s12 m6'><h4 class='center teal-text text-lighten-2'>Control de Error:</h4><h6 class='center teal-text'>CRC 8</h6> ");
        

        Auxiliar=crc8(&Tc[0],size+4);

        //printf("CRC 8 %#02x\n",Auxiliar);
        if(T[size+4]==Auxiliar){
           printf("<h6 class='center teal-text'>Trama Correcta</h6></div>\n");
            //printf("CRC 8 %#02x\n",Auxiliar);
        }
        else
        	printf("<h6 class='center teal-text'>Trama Dañada</h6></div>\n");
            //printf("Trama corrupta\n");

        printf("<div class='col s12 m6'><h4 class='center teal-text text-lighten-2'>Código de linea:</h4> ");
        if (T[size+5]&1)
        {
        	printf("<h6 class='center teal-text'>Return 0</h6>\n");
        	
        }
        if (T[size+5]&2)
        {
        	printf("<h6 class='center teal-text'>No return 0</h6>\n");
        	
        }
        if (T[size+5]&4)
        {
        	printf("<h6 class='center teal-text'>Unipolar</h6>\n");
        	
        }
        if (T[size+5]&8)
        {
        	printf("<h6 class='center teal-text'>Polar</h6>\n");
        	
        }
        if (T[size+5]&16)
        {
        	printf("<h6 class='center teal-text'>AMI</h6>\n");
        	
        }
        if (T[size+5]&32)
        {
        	printf("<h6 class='center teal-text'>Pseudoternario</h6>\n");
        	
        }
        if (T[size+5]&64)
        {
        	printf("<h6 class='center teal-text'>Manchester</h6>\n");
        	
        }
        if (T[size+5]&128)
        {
        	printf("<h6 class='center teal-text'>Manchester Diferencial</h6>\n");
        	
        }
        printf("</div>\n");


        printf("<div class='col s12 m6'><h4 class='center teal-text text-lighten-2'>Medio:</h4> ");
        switch(T[size+6]>>5){
        case 1:
        printf("<h6 class='center teal-text'>Inalambrico:Wifi</h6>\n");
        break;
        case 2:
        printf("<h6 class='center teal-text'>Inalambrico:Infrarrojo</h6>\n");
        break;
        case 3:
        printf("<h6 class='center teal-text'>Inalambrico:Bluetooth</h6>\n");
        break;
        case 4:
        printf("<h6 class='center teal-text'>Alámbico: Coaxial</h6>\n");
        break;
        case 5:
        printf("<h6 class='center teal-text'>Alámbico: Par Trenzado</h6>\n");
        break;
        case 6:
        printf("<h6 class='center teal-text'>Alámbico: Fibra Optica</h6>\n");
        break;
        case 7:
        printf("<h6 class='center teal-text'>Alámbico: Telefónica</h6>\n");
        break;
        printf("</div>");
    	}


    }
    printf("</div>");
    printf("</div>");

    
    




    
    return 0;
}
