# Product Backlog — User Stories e Critérios de Aceitação
**Projeto:** ABP Tech0wl — Portal e Motor de Certificação (2026-2)  
**Rastreabilidade:** Vinculado a `docs/Gestao/BACKLOG.md` e Issues (`#1` a `#105`).

---

## 1. Requisitos Funcionais (RF01 a RF21)

### US01 — Página Inicial e Instruções (`RF01`)
* **Como** visitante do portal,
* **Quero** visualizar a página inicial com as instruções da certificação,
* **Para** entender as regras, o formato e os critérios da prova antes de iniciar.
* **Tasks Vinculadas:** `T001`, `T002`, `T003`, `T004`

**Critérios de Aceitação:**
* **Dado** que acesso a URL raiz da plataforma sem estar logado,
* **Quando** a página inicial é carregada,
* **Então** devo visualizar a apresentação da certificação, o tempo limite por questão (150s), a nota mínima para aprovação (65%) e botões visíveis para "Cadastrar" e "Entrar".

---

### US02 — Iniciar ou Retomar Certificação (`RF02`)
* **Como** candidato autenticado,
* **Quero** iniciar uma nova tentativa de certificação ou retomar uma avaliação em andamento,
* **Para** realizar a prova conforme a minha disponibilidade.
* **Tasks Vinculadas:** `T005`, `T006`, `T007`, `T008`

**Critérios de Aceitação:**
* **Cenário 1: Iniciar nova prova**
  * **Dado** que estou logado e não possuo certificação em aberto,
  * **Quando** clico em "Iniciar Certificação",
  * **Então** o sistema deve criar uma nova sessão de avaliação e carregar o primeiro tema.
* **Cenário 2: Retomar prova em andamento**
  * **Dado** que estou logado e possuo uma certificação interrompida anteriormente,
  * **Quando** acesso o painel do candidato,
  * **Então** o sistema deve exibir a opção "Retomar Certificação" direcionando para o próximo tema pendente.

---

### US03 — Cadastro de Candidato (`RF03`)
* **Como** candidato sem conta na plataforma,
* **Quero** me cadastrar informando CPF, nome completo, e-mail e senha,
* **Para** criar um perfil único e acessar o ambiente de estudos e certificação.
* **Tasks Vinculadas:** `T009`, `T010`, `T011`, `T012`, `T013`

**Critérios de Aceitação:**
* **Cenário 1: Cadastro realizado com sucesso**
  * **Dado** que estou na tela de cadastro e preencho um CPF válido e inédito, nome completo, e-mail válido e senha forte,
  * **Quando** submeto o formulário,
  * **Então** o sistema deve salvar meus dados com a senha criptografada e liberar o acesso ao login.
* **Cenário 2: Bloqueio de CPF duplicado**
  * **Dado** que o CPF informado já está registrado na base de dados,
  * **Quando** tento concluir o cadastro,
  * **Então** o sistema deve bloquear a operação e exibir a mensagem *"Este CPF já possui cadastro no sistema"*.
* **Cenário 3: Validação de campos obrigatórios e formato**
  * **Dado** que deixo algum campo vazio ou informo um CPF/e-mail inválido,
  * **Quando** tento enviar o formulário,
  * **Então** o sistema deve destacar os campos inválidos e impedir o envio.

---

### US04 — Autenticação e Sessão (`RF04`)
* **Como** candidato cadastrado,
* **Quero** fazer login informando meu CPF e senha,
* **Para** acessar minha área restrita de forma segura.
* **Tasks Vinculadas:** `T014`, `T015`, `T016`, `T017`, `T018`

**Critérios de Aceitação:**
* **Cenário 1: Login válido**
  * **Dado** que informo um CPF cadastrado e a senha correspondente correta,
  * **Quando** clico em "Entrar",
  * **Então** o sistema deve iniciar minha sessão autenticada e redirecionar para o painel do candidato.
* **Cenário 2: Credenciais inválidas**
  * **Dado** que informo um CPF inexistente ou senha incorreta,
  * **Quando** tento autenticar,
  * **Então** o sistema deve negar o acesso e exibir uma mensagem genérica de erro (*"CPF ou senha inválidos"*).

---

### US05 — Execução dos 12 Temas da Certificação (`RF05`)
* **Como** candidato em avaliação,
* **Quero** responder a uma questão para cada um dos 12 temas obrigatórios,
* **Para** ser avaliado integralmente em todo o conteúdo programático.
* **Tasks Vinculadas:** `T019`, `T020`, `T021`, `T022`, `T023`

**Critérios de Aceitação:**
* **Dado** que iniciei uma certificação,
* **Quando** avanço pelas etapas da avaliação,
* **Então** o sistema deve apresentar sequencialmente os 12 temas cadastrados, exibindo uma questão por tema na interface reutilizável de prova.

---

### US06 — Sorteio Aleatório de Questões (`RF06`)
* **Como** sistema de avaliação,
* **Quero** sortear aleatoriamente 1 questão dentre as 4 disponíveis para cada tema,
* **Para** garantir provas dinâmicas e evitar fraudes por memorização de gabarito.
* **Tasks Vinculadas:** `T024`, `T025`, `T026`

**Critérios de Aceitação:**
* **Dado** que o candidato acessa um tema durante a certificação,
* **Quando** o back-end prepara a questão daquele tema,
* **Então** o sistema deve selecionar aleatoriamente 1 das 4 questões vinculadas ao tema e vinculá-la à tentativa atual.

---

### US07 — Área de Estudos e Material Didático (`RF07`)
* **Como** candidato,
* **Quero** navegar pelos 12 temas na área de estudos e ler o material didático de cada um,
* **Para** me preparar adequadamente antes de iniciar a prova.
* **Tasks Vinculadas:** `T027`, `T028`, `T029`, `T030`, `T094`

**Critérios de Aceitação:**
* **Dado** que estou autenticado e acesso a seção "Estudos",
* **Quando** seleciono qualquer um dos 12 temas listados,
* **Então** o sistema deve carregar a página contendo o texto explicativo e os recursos didáticos referentes àquele tema.

---

### US08 — Estrutura das Questões e Alternativas (`RF08`)
* **Como** candidato respondendo à prova,
* **Quero** visualizar cada questão acompanhada de uma imagem ilustrativa e 4 alternativas (sendo apenas 1 correta),
* **Para** interpretar o cenário apresentado e selecionar minha resposta.
* **Tasks Vinculadas:** `T031`

**Critérios de Aceitação:**
* **Dado** que uma questão é carregada na tela de prova,
* **Quando** o conteúdo é renderizado,
* **Então** ela deve conter obrigatoriamente enunciado, imagem de apoio válida e 4 opções de escolha, das quais exatamente 1 está marcada como correta no banco de dados.

---

### US09 — Feedback Imediato da Resposta (`RF09`)
* **Como** candidato,
* **Quero** receber feedback imediato logo após confirmar minha alternativa,
* **Para** saber se acertei ou errei a questão e visualizar qual era a resposta certa.
* **Tasks Vinculadas:** `T032`, `T033`, `T034`, `T035`, `T036`, `T037`

**Critérios de Aceitação:**
* **Dado** que selecionei uma alternativa e cliquei em "Confirmar Resposta" dentro do tempo limite,
* **Quando** o back-end registra minha resposta,
* **Então** a interface deve destacar visualmente se acertei ou errei e indicar qual era a alternativa correta.

---

### US10 — Cronômetro Regressivo de 150 Segundos (`RF10`)
* **Como** candidato em avaliação,
* **Quero** visualizar um cronômetro regressivo de 150 segundos durante a resolução de cada questão,
* **Para** gerenciar meu tempo de resposta.
* **Tasks Vinculadas:** `T038`

**Critérios de Aceitação:**
* **Dado** que uma questão foi exibida na tela,
* **Quando** a contagem inicia,
* **Então** o cronômetro deve regredir segundo a segundo a partir de `02:30` (150s), mantendo sincronia com o timestamp registrado no back-end.

---

### US11 — Encerramento Automático por Tempo Esgotado (`RF11`)
* **Como** sistema de avaliação,
* **Quero** encerrar automaticamente a questão caso os 150 segundos expirem sem envio de resposta,
* **Para** assegurar o cumprimento rigoroso do tempo máximo permitido.
* **Tasks Vinculadas:** `T039`

**Critérios de Aceitação:**
* **Dado** que o cronômetro de uma questão atingiu `00:00` sem que o candidato confirmasse uma alternativa,
* **Quando** o tempo expira,
* **Então** o back-end deve bloquear qualquer submissão tardia, marcar a questão como encerrada/não respondida (incorreta) e liberar o avanço.

---

### US12 — Continuidade ou Encerramento de Sessão (`RF12`)
* **Como** candidato,
* **Quero** escolher entre continuar para o próximo tema ou encerrar a sessão após visualizar o feedback de uma questão,
* **Para** poder pausar a prova sem perder o que já respondi.
* **Tasks Vinculadas:** `T040`

**Critérios de Aceitação:**
* **Dado** que visualizo a tela de feedback após responder (ou expirar o tempo de) uma questão,
* **Quando** avalio minhas opções de navegação,
* **Então** devo visualizar os botões "Próxima Questão" e "Salvar e Sair (Encerrar Sessão)", mantendo todo o progresso salvo caso opte por sair.

---

### US13 — Retomada pelo Próximo Tema Pendente (`RF13`)
* **Como** candidato que pausou uma avaliação,
* **Quero** retomar a certificação exatamente a partir do próximo tema ainda não respondido,
* **Para** concluir a prova de onde parei.
* **Tasks Vinculadas:** `T041`, `T042`

**Critérios de Aceitação:**
* **Dado** que já respondi a $N$ temas em uma tentativa em andamento (onde $N < 12$),
* **Quando** retorno ao sistema e clico em "Retomar Certificação",
* **Então** o sistema deve carregar diretamente o tema de número $N + 1$, sem exibir novamente os temas anteriores.

---

### US14 — Encerramento por Queda de Conexão ou Fechamento (`RF14`)
* **Como** sistema de avaliação,
* **Quero** encerrar a questão ativa caso o candidato feche a aba, atualize a página ou perca a conexão durante a resolução,
* **Para** impedir tentativas de burlar o cronômetro de 150 segundos.
* **Tasks Vinculadas:** `T043`

**Critérios de Aceitação:**
* **Dado** que uma questão já foi sorteada e iniciada para o candidato,
* **Quando** ocorre abandono da página, desconexão ou expiração do prazo no servidor sem resposta salva,
* **Então** o sistema deve considerar aquele tema como encerrado, permitindo que na próxima conexão o candidato avance apenas para o tema seguinte.

---

### US15 — Bloqueio de Repetição de Tema Encerrado (`RF15`)
* **Como** sistema de avaliação,
* **Quero** impedir que um tema já respondido ou encerrado seja aberto ou submetido novamente na mesma tentativa,
* **Para** garantir a integridade da pontuação.
* **Tasks Vinculadas:** `T044`, `T045`

**Critérios de Aceitação:**





######################################################
######################################################

# Backlog do Produto - User Stories
**Projeto:** [Nome do Projeto / Tech0wl-2026/projects/7]

---

## Épica 1: Autenticação e Gestão de Usuários

### US01: Cadastro de Usuário
* **Como** novo usuário,
* **Eu quero** criar uma conta na plataforma utilizando meu e-mail e senha,
* **Para que** eu possa acessar os recursos restritos do sistema.

**Critérios de Aceite:**
- [ ] O formulário deve validar e-mails com formato válido.
- [ ] A senha deve conter no mínimo 8 caracteres, incluindo números e letras.
- [ ] Um e-mail de confirmação deve ser disparado após o cadastro.
- [ ] Em caso de sucesso, o usuário é redirecionado para a tela de login ou dashboard.

### US02: Login e Logout
* **Como** usuário cadastrado,
* **Eu quero** fazer login com minhas credenciais,
* **Para que** eu possa navegar de forma segura na minha conta.

**Critérios de Aceite:**
- [ ] Tela de login com campos de e-mail/usuário e senha.
- [ ] Mensagem de erro clara para credenciais inválidas.
- [ ] Botão de "Esqueci minha senha" funcional.
- [ ] Botão de logout visível que encerra a sessão e redireciona para a página inicial.

---

## Épica 2: Core do Produto / Funcionalidade Principal

### US03: Visualização do Dashboard
* **Como** usuário autenticado,
* **Eu quero** visualizar um painel principal com os principais indicadores/dados,
* **Para que** eu tenha uma visão geral rápida do sistema.

**Critérios de Aceite:**
- [ ] O dashboard deve carregar em menos de 2 segundos.
- [ ] Exibição de cards com métricas principais.
- [ ] Design responsivo (compatível com desktop e mobile).

### US04: Criação de Registros (CRUD - Create)
* **Como** usuário,
* **Eu quero** criar um novo item/registro na plataforma,
* **Para que** eu possa gerenciar meus dados.

**Critérios de Aceite:**
* [ ] Formulário intuitivo com validação de campos obrigatórios.
* [ ] Feedback visual (notificação/toast) após a criação bem-sucedida.
* [ ] O novo item aparece imediatamente na listagem geral.

---

## Épica 3: Configurações e Perfil

### US05: Edição de Perfil
* **Como** usuário,
* **Eu quero** editar minhas informações pessoais (nome, foto, senha),
* **Para que** meu perfil esteja sempre atualizado.

**Critérios de Aceite:**
- [ ] Página de configurações de perfil acessível via menu principal.
- [ ] Possibilidade de alterar a senha atual exigindo a confirmação da senha antiga.
- [ ] Salvamento de alterações com confirmação na interface.
