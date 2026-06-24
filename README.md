# Gerenciador de Informações do Usuário com Formulários e Sessões em PHP

Este projeto foi desenvolvido para demonstrar o funcionamento prático de **formulários HTML** com PHP e o gerenciamento de **sessões**, abordando a coleta, processamento e armazenamento temporário de dados do usuário.

---
**Conteúdo Complementar em Vídeo**  
Para explicações adicionais, assista ao vídeo explicativo pelo link abaixo:  
[[🔗 Link do Vídeo](https://youtu.be/nLHfJhlRzcA)]

---
## Conceitos Fundamentais

### O que é um Formulário HTML?
Formulários são usados para coletar informações dos usuários em uma página web. Utilizamos a tag `<form>` com os atributos `action` (para onde os dados vão) e `method="post"` (forma de envio mais segura).

### O que é Processamento com PHP?
Após o envio do formulário, o PHP recebe os dados através da superglobal `$_POST`. Esses dados podem ser tratados, validados e utilizados no servidor.

### O que são Sessões em PHP?
Sessões permitem armazenar informações do usuário enquanto ele navega entre diferentes páginas do site. Diferente dos cookies (que ficam no navegador), os dados da sessão ficam salvos no servidor.  
É muito usado em sistemas de login, carrinhos de compras e perfis temporários.

Principais funções:
- `session_start()` → Inicia a sessão
- `$_SESSION[]` → Array onde guardamos os dados
- `session_destroy()` → Encerra a sessão e apaga os dados

---
## Funcionamento Técnico do Código

1. **Formulário (index.php)**  
   O usuário preenche nome e e-mail e envia os dados via POST para o arquivo `processa.php`.

2. **Processamento (processa.php)**  
   - Inicia a sessão com `session_start()`
   - Recebe os dados do `$_POST`
   - Salva as informações na `$_SESSION`
   - Redireciona para a página de perfil

3. **Exibição dos Dados (perfil.php)**  
   - Verifica se existe sessão ativa
   - Mostra os dados salvos (nome e e-mail)

4. **Encerramento da Sessão (logout.php)**  
   - Chama `session_destroy()` para limpar todos os dados da sessão
   - Redireciona de volta ao formulário

---
## Como Executar o Projeto

1. Coloque todos os arquivos em uma pasta (ex: `formularios-sessoes`)
2. Abra o terminal dentro da pasta e execute:
   ```bash
   php -S localhost:8000
