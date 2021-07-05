<?php 

//Observe atentamente e perceba que o primeiro conjunto de caracteres está demarcado sob aspas simples, enquanto que o segundo está envolto por aspas duplas. Aspas simples mantém os caracteres exatamente como estão, portanto o tamanho (strlen()) da string dessa primeira expressão é 4. Já a segunda porção resulta em 3 pois \n é convertido em quebra de linha e conta como um caractere, ao invés de dois.

echo strlen('1\n2') * strlen("1\n2");
