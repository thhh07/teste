# Função para adicionar dois números
def adicionar(a, b):
    return a + b

# Função para subtrair dois números
def subtrair(a, b):
    return a - b

# Função para multiplicar dois números1
def multiplicar(a, b):
    return a * b

# Função para dividir dois números
def dividir(a, b):
    if b != 0:
        return a / b
    else:
        print("Erro: Divisão por zero!")
        return None

# Função principal da calculadora
def calculadora():
    while True:
        print("Selecione uma operação:")
        print("1. Adicionar")
        print("2. Subtrair")
        print("3. Multiplicar")
        print("4. Dividir")
        print("5. Sair")
        
        escolha = input("Digite sua opção (1/2/3/4/5): ")
        
        if escolha == '5':
            print("Calculadora encerrada.")
            break
        
        num1 = float(input("Digite o primeiro número: "))
        num2 = float(input("Digite o segundo número: "))
        
        if escolha == '1':
            resultado = adicionar(num1, num2)
            print("Resultado: ", resultado)
        elif escolha == '2':
            resultado = subtrair(num1, num2)
            print("Resultado: ", resultado)
        elif escolha == '3':
            resultado = multiplicar(num1, num2)
            print("Resultado: ", resultado)
        elif escolha == '4':
            resultado = dividir(num1, num2)
            if resultado is not None:
                print("Resultado: ", resultado)
        else:
            print("Opção inválida. Tente novamente.")

# Executar a calculadora
calculadora()


