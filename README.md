SOLID - PHP
========

Endpoint | Description
--- | ---
`S` | SRP - Single Responsibility Principle (Princípio da Responsabilidade Única) :heavy_check_mark:
`O` | OCP - Open/Closed Principle (Princípio Aberto/Fechado) :x:
`L` | LSP - Liskov Substitution Principle (Princípio de Substituição de Liskov) :x:
`I` | ISP - Interface Segregation Principle (Princípio da Segregação de Interface) :x:
`D` | DIP - Dependency Inversion Principle (Princípio da Inversão de Dependência) :x:


# Exec server 
`server php -S localhost:8000`

# Structure created as an example
## SRP :ok:
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
## OCP :o2:


# PHP and Composer version
PHP 7.4.28
Composer version 2.2.9
