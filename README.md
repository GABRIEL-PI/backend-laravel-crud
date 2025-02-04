## Como Clonar o Repositório
```
git clone https://github.com/GABRIEL-PI/laravel-crud.git
cd laravel-crud
```

## Instalação e Configuração
1. Instale as dependências:
```
composer install
```
2. Configure o arquivo `.env`:
```
cp .env.example .env
```
3. Gere a chave da aplicação:
```
php artisan key:generate
```
4. Configure o banco de dados no `.env` (MySQL):
```
DB_DATABASE=seu_banco
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha
```
5. Rode as migrations:
```
php artisan migrate
```

## Executando o Projeto
```
php artisan serve
```
O backend estará disponível em `http://127.0.0.1:8000` (Verifique a disponibilidade da porta.)

## Endpoints da API
- **GET** `/api/domains` → Lista todos os domínios.
- **POST** `/api/domains` → Cria um novo domínio.
- **PUT** `/api/domains/{id}` → Atualiza um domínio existente.
- **DELETE** `/api/domains/{id}` → Exclui um domínio.
- **GET** `/api/blocks` → Lista todos os blocos.
- **POST** `/api/blocks` → Cria um novo bloco.
- **PUT** `/api/blocks/{id}` → Atualiza um bloco existente.
- **DELETE** `/api/blocks/{id}` → Exclui um bloco.

## EXEMPLOS

### 1. Criar um Domínio
**Método:** POST  
**URL:** `http://127.0.0.1:8000/api/domains`

**Headers:**
```
Key: Content-Type
Value: application/json
```

**Body (raw, JSON):**
```json
{
  "name": "Meu Domínio"
}
```

### 2. Atualizar um Domínio
**Método:** PUT  
**URL:** `http://127.0.0.1:8000/api/domains/{id}`

**Headers:**
```
Key: Content-Type
Value: application/json
```

**Body (raw, JSON):**
```json
{
  "name": "Novo Nome do Domínio"
}
```

### 3. Deletar um Domínio
**Método:** DELETE  
**URL:** `http://127.0.0.1:8000/api/domains/{id}`

---

### 4. Criar um novo Block
**Método:** POST  
**URL:** `http://127.0.0.1:8000/api/blocks`

**Headers:**
```
Key: Content-Type
Value: application/json
```

**Body (raw, JSON):**
```json
{
  "name": "Meu Bloco",
  "domain_id": 1
}
```

### 5. Atualizar um Block
**Método:** PUT  
**URL:** `http://127.0.0.1:8000/api/blocks/{id}`

**Headers:**
```
Key: Content-Type
Value: application/json
```

**Body (raw, JSON):**
```json
{
  "name": "Novo Nome do Bloco",
  "domain_id": 1
}
```

### 6. Deletar um Block
**Método:** DELETE  
**URL:** `http://127.0.0.1:8000/api/blocks/{id}`