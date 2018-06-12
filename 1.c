#include <stdio.h>
#include <string.h>
#include <stdlib.h>

typedef unsigned char byte;


int main(int argc, char const *argv[]) {
    
    int NumberOfBytesToConvert = (argc - 1) / 8;

    byte* BitsToArrayBytes = malloc(sizeof(byte) * NumberOfBytesToConvert);

    for (int i = 0; i < NumberOfBytesToConvert; ++i) {
        BitsToArrayBytes[i] = 0;
        for (int j = 0; j < 8; ++j) {
            int Bit = argv[(i * 8) + j + 1][0] - '0';
            BitsToArrayBytes[i] = (BitsToArrayBytes[i] << 1) | (Bit); 
        }
    }

   /* for (int i = 0; i < NumberOfBytesToConvert; ++i) {
        printf("Parameter %i is %hhu\n", i, BitsToArrayBytes[i]);
    }*/

    return 0;
}