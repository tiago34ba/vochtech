# teste Solicitado pela empressa vochtech seuge o Passo a passo de como fazer o sistema Funcionar 

Sistema de cadastro de Unidade Colaboradores e Grupo Econômico

## Pré-requisitos

Antes de começar, certifique-se de ter o seguinte instalado em sua máquina:

- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/) (que inclui npm)
- [Git](https://git-scm.com/)

## Instalação

Siga os passos abaixo para configurar o projeto:

1. **Clone o repositório:**
   
    git clone https://github.com/usuario/nome-do-repositorio.git
    cd nome-do-repositorio
    ```

2. **Instale as dependências PHP com o Composer:**
   
    composer install
    ```

3. **Crie uma cópia do arquivo `.env.example` e renomeie para `.env`:**
    
    cp .env.example .env
    ```

4. **Gere a chave da aplicação:**
  
    php artisan key:generate
    ```

5. **Configure o arquivo `.env` com as informações do banco de dados e outras configurações necessárias.**

6. **Execute as migrações do banco de dados:**
  
    php artisan migrate
    ```

7. **Instale as dependências JavaScript com o npm:**
   
    npm install
    ```

8. **Compile os arquivos do frontend:**
    
    npm run dev
    ```

9. **Inicie o servidor de desenvolvimento do Laravel:**
   
    php artisan serve
    ```

Agora você deve conseguir acessar o projeto em `http://localhost:8000`.



