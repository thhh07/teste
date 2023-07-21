import os

# Criando banco de dados
nome = input("Digite seu nome: ")

# Limitador para solo números
while True:
    try:
        idade = int(input("Digite sua idade: "))
        break
    except ValueError:
        print("\nEntrada inválida. Por favor, digite um número válido.")

print("Você digitou a idade:", idade)

# Interacción com usuario
os.system('clear')
print("Olá, " + nome + "!")
print("\nSeja bem-vindo ao nosso cadastro. Abaixo segue um questionário:")

# CPF
while True:
    try:
        cpf = int(input("\nDigite o CPF (max 11 caracteres): "))
        if len(str(cpf)) <= 11:
            break
        else:
            print("\nCPF inválido. Digite no máximo 11 caracteres.")
    except ValueError:
        print("\nEntrada inválida. Por favor, digite um número válido.")

# Telefone
telefone = input("\nDigite seu número de telefone: ")

# Senha
senha = input("\nEscolha uma senha: ")

# Limpiar la pantalla
os.system('clear')

# Interacción con el usuario 2
# Mostrar login/senha
print("Cadastro efetuado com sucesso!")
print("\nLogin: " + str(cpf))
print("Senha: " + senha)

# Información guardada
# print(nome)
# print(idade)
# print(cpf)
# print(telefone)
print(" Um minuto processando informaçãoes ")

