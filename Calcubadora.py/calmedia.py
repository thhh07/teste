def calcular_variancia_amostral(dados):
    n = len(dados)
    media = sum(dados) / n
    soma_diferencas = sum((x - media) ** 2 for x in dados)
    variancia_amostral = soma_diferencas / (n - 1)
    return variancia_amostral

# Exemplo de uso
meus_dados = [26, 25, 19, 17, 25, 25, 20, 18, 18, 17, 17]
variancia = calcular_variancia_amostral(meus_dados)
print("Variância amostral:", variancia)
