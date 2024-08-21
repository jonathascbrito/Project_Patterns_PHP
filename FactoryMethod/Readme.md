# Padrão de Projeto Factory Method

## Definição

### O objetivo do padrão de projeto Factory Method é encapsular a criação e os objetos de um sistema. Neste padrão encapsula-se a criação de objetos deixando as subclasses decidirem quais os objetos criar.

![Diagrama de Classes do Padrão Factory Method](https://upload.wikimedia.org/wikipedia/commons/thumb/e/ed/Factory_Method_UML_class_diagram.png/400px-Factory_Method_UML_class_diagram.png)

## Vantagens
### Nos fornece um meio de desligar a implementação de um Product. Adicionando ou alterando Products isso não irá afetar o Creator, pois eles não estão fortemente ligados.

## Desvantagens
### Cria uma estrutura complexa quando os objetos usados possuem representações simples e nesse caso o uso do Factory Method é inadequado. Pode levar os objetos clientes a ter que fornecer subclasses da classe que é responsável por retornar os objetos, somente para criar um objeto concreto.
