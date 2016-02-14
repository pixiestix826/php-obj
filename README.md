# php-obj

Produce a working exmple of php objects using plain php, including a demonstration of polymorphism.

## Polymporphism

Polymorphism is an object-oriented programming concept that allows objects that may be similar to exercise their unique abilities.
Many examples I found online used examples such as: fruit, which acts as the interface to differing types of fruit like apples, bananas or oranges. 
Where all of these fall under the same category as fruit, but some can be eaten straight away and some must be peeled; or animals, which
is such a broad category, can act as interface for many types of animals like dogs, cats, and bears where each of these animals behave differently.

## My Interpretation

In my example, I wanted to show the potential complexity when using classes that implement interfaces.

* Using several examples from different online sources, I put together an example of polymorphism that utilized both public and private methods.
* Creating a toon interface allowed me to showcase differences in character classes, each with differing races and skill sets, for a popular online game.
* Using a public __construct function allowed me to gather private information on each character including: Name, Race and Skill Set.
* Calling a public method of getSkillz() allowed each character to showcase unique talents/abilities.
* Finally, the player class is able to play the toon through a return of the constructor.
