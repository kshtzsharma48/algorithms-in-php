Algorithms in PHP
=================

[![Build Status](https://secure.travis-ci.org/breerly/algorithms-in-php.png?branch=master)](http://travis-ci.org/breerly/algorithms-in-php)

This repository is a collection of algorithms and teachings written in PHP.

### Prequisites.

* Discrete Mathematics
* Probability
* Basic Object Oriented Programming (PHP, C++, Java)

## Analyzing Algorithms:

In order to write algorithms, we first need to master how to analyze them. 



CLEAN ME:

* Running time:
*  - depends on the input (e.g. already sorted, worst case reverse sorted)
*  - depends on the input size (6 elements vs 60000 elements)
*  - want upper bounds on the running time (e.g. won't run longer than 3 seconds)
*  - upper bounds represents a gaurantee to the user
*
* Kinds of analysis:
*  - worst case (most popular)
*      - T(n) = max time of any input of size n
*      - depends on the computer
*      -
*  - average case
*      - T(n) = expected time over all inputs of size n
*      - this requires an assumption of the statistical distribution of inputs
*  - best case
*      - this is bogus because you can make slow algorithms look fast (cheating)
*      - a slow algorithm can look fast on some inputs (cheating)
*


Problem:
* Comparing algorithms:
*   - compared on same machine using relative speed
*   - absolute speed on different machines is confusing

Solution:
BIG IDEA OF ALGORITHMS:
 - asymptotic "ass-en-totic" analysis
 1. ignore dependent constants
 2. look at the GROWTH of the running time. T(n) as n -> infinity

Asymptotic Notation: an engineering way to do theta notation

Theta notation is used predominately
   - drop low order terms
   - ignore leading constants
   - ex: 3n^3 + 90n^2 - 5n + 6046 = Theta(n^3)
   - O Notation and Omega Notation are related
