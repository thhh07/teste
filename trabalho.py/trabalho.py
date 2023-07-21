# importando as bibliotecas necessárias para resolver o problema
import sklearn as sk
import numpy as np
import pandas as pd
# importantado os recursos de informações que serão utilizaos
from sklearn import datasets
# carregando as informações que serão utilizadas. A varíavel abaixo armazena as informações disponibilizadas pela biblioteca. Neste caso, informações sobre a flor íris.
iris = datasets.load_iris()
iris
# a linha abaixo possibilita vermos os DADOS que temos disponíveis
iris.data
# o target são as classificações possíveis da íris. No caso temos 0 = setosa, 1 = versicolor e 2 = virginica. red=setosa,green=versicolor,blue=virginica
target = iris.target_names[iris.target]
# o feature_names traz os nomes das colunas relativas as informações contidas no iris.data
iris.feature_names
# a target names, traz as informações de cada classificação da iris. Como dito mais acima, 0 = setosa, 1 = versicolor e 2 = virginica. red=setosa,green=versicolor,blue=virginica
iris.target_names
# Código tem a função d criar um DataFrame e exibir os tipos de dados de cada coluna desse DataFrame.
data = pd.DataFrame(data=iris.data, columns=iris.feature_names)
print(data.dtypes)
#tem a função de criar um DataFrame chamado "target", Ao usar a função pd.DataFrame(), o código cria um novo DataFrame chamado "target" 

target = pd.DataFrame(data=target, columns=['classification'])
print(target.dtypes)
# Código para junção dos DataFrame
# O método pd.concat() do pandas é usado para combinar os DataFrames. 
# A função axis é usada para especificar a direção

combined_data = pd.concat([data, target], axis=1)
# Código para adicionar uma nova coluna no DataFrame "combined_data" 
# Nessa linha e criada uma nova lista "combined_data" 
new_feature_names = iris.feature_names + ['classification']
# Nessa linha, os nomes das colunas do DataFrame "combined_data" são atualizados com os valores da lista "new_feature_names". 
combined_data.columns = new_feature_names
# Aqui a fução "display" e usada para mostrar o DataFrame atualizado
display(combined_data)
# Renomear as colunas 
#new_column_names = {...} = mapeia o nome das colunas "trocando" antigos nomes para novos nomes
new_column_names = {
    'sepal length (cm)': 'comprimento_sepala',
    'sepal width (cm)': 'largura_sepala',
    'petal length (cm)': 'comprimento_petala',
    'petal width (cm)': 'largura_petala',
    'classification': 'classificacao'
}
# O DataFrame "combined_data" é atualizado com as colunas renomeadas
combined_data = combined_data.rename(columns=new_column_names)
# Selecionar colunas específicas
# Cria nova variável é a variável "iloc" seleciona por números inteiros das linhas
selected_columns = combined_data.iloc[:, [0, 2, 4]]
# Novamente função display para atualizar informações 
display(selected_columns)
# 5 - Filtrar registros (linhas)
# Conte quantos registro que:
# 1. petal length (cm) == 1.4 (informe a quantidade aqui)
# 2. petal length (cm) seja maior que 1.4 e classification seja igual a setosa (informe a quantidade aqui)
# 3. sepal length (cm) seja igual a 5.1 e petal width (cm) seja igual a 0.2 (informe a quantidade aqui)
# 4. sepal length (cm) seja igual a 5.1 ou petal width (cm) seja igual a 0.2(informe a quantidade aqui)

##calcula quatro contagens diferentes com base nas condições aplicadas a um DataFrame chamado combined_data.

count_1 = len(combined_data[combined_data['petal length (cm)'] == 1.4])
count_2 = len(combined_data[(combined_data['petal length (cm)'] > 1.4) & (combined_data['classification'] == 'setosa')])
count_3 = len(combined_data[(combined_data['sepal length (cm)'] == 5.1) & (combined_data['petal width (cm)'] == 0.2)])
count_4 = len(combined_data[(combined_data['sepal length (cm)'] == 5.1) | (combined_data['petal width (cm)'] == 0.2)])
# Excluindo linhas 0, 2, 4, 6 com a função "drop()" = usado para remover linhas e colunas
# Combined_data. Em seguida, remove a coluna com o nome 'petal length (cm)' do DataFrame combined_data.
combined_data = combined_data.drop([0, 2, 4, 6])
combined_data = combined_data.drop('petal length (cm)', axis=1)
# Agrupamento de colunas "combined_data"
# Agrupe as informações pela coluna classification e conte quantos valores
# Agrupe as informações pela coluna petal width (cm) e conte quantos valores
grouped_by_classification = combined_data.groupby('classification').size()
grouped_by_petal_width = combined_data.groupby('petal width (cm)').size()
# O código salva o DataFrame combined_data em um arquivo CSV usando o método "to_csv()"
# Gere um csv final para o resultado obtido.
combined_data.to_csv('iris_processed.csv', index=False)
display(combined_data)
