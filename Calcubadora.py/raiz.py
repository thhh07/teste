import math

def calcular_raiz_quadrada(numero):
    if numero < 0:
        return "Erro: Não é possível calcular a raiz quadrada de um número negativo."
    else:
        return math.sqrt(numero)

# Exemplo de uso:
numero = float(input("Digite um número: "))
resultado = calcular_raiz_quadrada(numero)
print("A raiz quadrada de", numero, "é", resultado)
