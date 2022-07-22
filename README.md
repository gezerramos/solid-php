SOLID - PHP <a href="https://php.net/" title="PHP"><img src="https://github.com/tomchen/stack-icons/blob/master/logos/php.svg" alt="PHP" width="35px" height="35px"></a>
========

Endpoint | Description
--- | ---
`S` | SRP - Single Responsibility Principle (Princípio da Responsabilidade Única) :heavy_check_mark:
`O` | OCP - Open/Closed Principle (Princípio Aberto/Fechado) :heavy_check_mark:
`L` | LSP - Liskov Substitution Principle (Princípio de Substituição de Liskov) :heavy_check_mark:
`I` | ISP - Interface Segregation Principle (Princípio da Segregação de Interface) :heavy_check_mark:
`D` | DIP - Dependency Inversion Principle (Princípio da Inversão de Dependência) :x:
`PHPUnit` | Extra - Implementing Automated Unit Tests :heavy_check_mark:

# Structure created as an example
## SRP :ok:
```
- item
- CarrinhoCompra->item()
- Pedido->CarrinhoCompra()
- index-> [
          ->EmailService,
          ->Item,
          ->Pedido,
          ->CarrinhoCompra
          ]
```
## OCP :ok:
```
- index-> class Leitor
- index-> [
          ->getDiretorio(),
          ->getArquivo(),
          ->setDiretorio(),
          ->setArquivo(),
          ->lerArquivo() [
              call_user_func_array (
                class Txt or Csv or Xlsx
               )
            ]
          ]
```
## LSP :ok:
```
- index-> class Poligono
- index-> class Retangulo
- index-> class Quadrado
- index-> [
          ->setForma(new Retangulo());
            ->setAltura(5);
            ->setLargura(10);
          ->setForma(new Quadrado());
            ->setAltura(5);
            ->setLargura(10);   
          ]
```
## ISP :ok:
```
```
## DIP :soon:
```
```

# Exec server 
`php -S localhost:8000`

# PHP and Composer version
PHP 7.4.28
Composer version 2.2.9

# command to generate the necessary files that Composer will use for autoloading.

composer dump-autoload