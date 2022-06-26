SOLID - PHP
========

Endpoint | Description
--- | ---
`S` | SRP - Single Responsibility Principle (Princípio da Responsabilidade Única)
`O` | OCP - Open/Closed Principle (Princípio Aberto/Fechado)
`L` | LSP - Liskov Substitution Principle (Princípio de Substituição de Liskov)
`I` | ISP - Interface Segregation Principle (Princípio da Segregação de Interface)
`D` | DIP - Dependency Inversion Principle (Princípio da Inversão de Dependência)


# Exec server 
`server php -S localhost:8000`

# Structure created as an example
## SRP
```
- item
- CarrinhoCompra->item
- Pedido->CarrinhoCompra
- index-> [
          ->EmailService,
          ->Item,
          ->Pedido,
          ->CarrinhoCompra
          ]
```
## OCP


========
# PHP and Composer version
PHP 7.4.28
Composer version 2.2.9
