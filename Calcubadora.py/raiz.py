def calcular_probabilidade(resultados_favoraveis, resultados_possiveis):
    probabilidade = resultados_favoraveis / resultados_possiveis
    return probabilidade

resultados_favoraveis = int(input("Digite o número de resultados favoráveis: "))
resultados_possiveis = int(input("Digite o número total de resultados possíveis: "))

probabilidade = calcular_probabilidade(resultados_favoraveis, resultados_possiveis)

print("A probabilidade do evento é:", probabilidade)
