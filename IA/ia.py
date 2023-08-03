import nltk
from nltk.chat.util import Chat, reflections

# Definindo padrões e respostas para o chatbot
pares = [
    [
        r"Oi|Olá",
        ["Olá! Como posso ajudar?", "Oi! Como posso ajudar você?"]
    ],
    [
        r"Qual é o seu nome?",
        ["Meu nome é ChatGPT, sou um chatbot.", "Você pode me chamar de ChatGPT."]
    ],
    [
        r"Qual é a sua cor favorita?",
        ["Eu sou uma inteligência artificial, então não tenho preferências de cores.", "Não tenho uma cor favorita, sou feito de código."]
    ],
    [
        r"Adeus|Até logo",
        ["Até logo! Se precisar de mais ajuda, estou aqui.", "Até a próxima! Tenha um bom dia!"]
    ],
    # Adicione mais padrões e respostas aqui
]

# Inicializando o chatbot
chatbot = Chat(pares, reflections)

# Função para iniciar o chatbot
def main():
    print("Olá! Inicie a conversa digitando uma mensagem ou digite 'sair' para encerrar.")
    while True:
        user_input = input("Você: ")
        if user_input.lower() == "sair":
            print("Chat encerrado.")
            break
        response = chatbot.respond(user_input)
        print("ChatGPT:", response)

if __name__ == "__main__":
    main()

