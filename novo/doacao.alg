algoritmo "CriancaEsperanca"

var
     D: inteiro
     Valor: real
inicio
     Escreval ("---------")
     escreval ("Crianca Esperanca")
     Escreval ("---------")
     Escreval (" Muito obrigado por ajudar ")
     Escreval ("[1] Para doar R$10 ")
     Escreval ("[2] Para doar R$25 ")
     Escreval ("[3] Para doar R$50 ")
     Escreval ("[4] Para doar outros valores ")
     Escreval ("[5] Para cancelar ")
     leia (D)
     Escolha D
             Caso 1
                  Valor <- 10
             Caso 2
                  Valor <- 25
             Caso 3
                  Valor <- 50
             Caso 4
                  Escreva ("Qual o valor da sua doacao? R$")
                  Leia (Valor)
             Caso 5
                  Valor <- 0
     FimEscolha
     Escreval ("------------")
     Escreval (" Sua doacao foi de R$", Valor)
     Escreval (" Muito obrigado! ")
     Escreval ("-----------")
     
             
fimalgoritmo
