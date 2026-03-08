# 📚 Sistema de Biblioteca em PHP (OOP)

Projeto desenvolvido para praticar **Programação Orientada a Objetos em PHP**, simulando um sistema simples de **gerenciamento de biblioteca**.

O sistema permite:

* Adicionar itens na estante
* Buscar livros
* Listar itens disponíveis
* Emprestar itens para usuários
* Devolver itens para a estante

---

# 🧠 Conceitos aplicados

Este projeto utiliza vários conceitos importantes de **OOP em PHP**:

* Classes e Objetos
* Herança
* Classes Abstratas
* Polimorfismo
* Encapsulamento
* Tipagem forte
* Arrow Functions (`fn`)
* Manipulação de Arrays (`array_filter`)

---

# 🏗 Estrutura do Projeto

```
src/
 ├── Biblioteca/
 │   ├── ItensBiblioteca.php
 │   ├── Livro.php
 │   ├── Revista.php
 │   ├── Estante.php
 │   ├── Usuario.php
 │   ├── Aluno.php
 │   ├── Professor.php
 │   └── Bibliotecario.php
```

---

# 📖 Classes principais

## 📦 Estante

Responsável por **armazenar os itens da biblioteca**.

Funções principais:

* adicionarItem()
* removerItem()
* buscarItens()
* listarLivros()

---

## 📚 ItensBiblioteca

Classe base para os itens da biblioteca.

Itens derivados:

* Livro
* Revista

Cada item possui:

* título
* disponibilidade

---

## 👤 Usuario (classe abstrata)

Define o comportamento de usuários da biblioteca.

Usuários derivados:

* Aluno
* Professor
* Visitante

Responsabilidades:

* pegar itens emprestados
* devolver itens
* listar itens emprestados

---

## 🧑‍🏫 Bibliotecario

Responsável por **gerenciar empréstimos e devoluções**.

Funções:

* emprestarItem()
* devolverItem()

Ele controla:

* disponibilidade do item
* regras do usuário
* atualização da estante

---

# 🚀 Como executar o projeto

### 1️⃣ Instalar dependências

```bash
composer install
```

---

### 2️⃣ Executar o sistema

```bash
php index.php
```

ou abrir no navegador:

```
http://localhost/seu-projeto
```

---

# 🧪 Exemplo de uso

```php
$estante = new Estante();

$livro = new Livro("Senhor dos Aneis", "Tolkien");

$estante->adicionarItem($livro);

$resultado = $estante->buscarItens("senhor");

var_dump($resultado);
```

---

# 🔍 Exemplo de empréstimo

```php
$bibliotecario = new Bibliotecario();

$aluno = new Aluno("Romulo");

$bibliotecario->emprestarItem($aluno, $livro, $estante);
```

---

# 🧩 Possíveis melhorias

* Sistema de **limite de empréstimos**
* Histórico de empréstimos
* Interface web
* Persistência em banco de dados
* Sistema de reservas

---

# 📚 Objetivo do projeto

Este projeto foi criado para **estudo e prática de arquitetura orientada a objetos em PHP**.

Ele simula regras reais de um sistema de biblioteca para exercitar:

* modelagem de domínio
* separação de responsabilidades
* organização de código

---

# 👨‍💻 Autor

**Rômulo Santos**

Desenvolvedor em formação focado em **PHP e Backend**.

---

# 📝 Licença

Projeto livre para estudo e aprendizado.
