from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.chrome.options import Options
import time

# Configurar o caminho para o driver do Chrome
chrome_driver_path = "caminho/para/o/driver/do/chrome"

# Configurar as opções do Chrome
chrome_options = Options()
chrome_options.add_argument("--headless")  # Executar o Chrome em modo headless (sem abrir a janela do navegador)

# Inicializar o driver do Chrome
driver = webdriver.Chrome(executable_path=chrome_driver_path, options=chrome_options)

# Navegar para o site de ponto
driver.get("https://www.exemplo.com")

# Encontrar os elementos do formulário de login e preenchê-los
username_input = driver.find_element_by_name("arthur.gomes")
username_input.send_keys("arthur.gomes")
password_input = driver.find_element_by_name("00111")
password_input.send_keys("00111")
password_input.send_keys(Keys.RETURN)  # Pressionar Enter para enviar o formulário

# Aguardar um pouco para que a página seja carregada
time.sleep(2)

# Encontrar o elemento correspondente ao botão de ponto e clicar nele
ponto_button = driver.find_element_by_id("ponto_button")
ponto_button.click()

# Aguardar um pouco para que o ponto seja efetuado
time.sleep(2)

# Fechar o navegador
driver.quit()
