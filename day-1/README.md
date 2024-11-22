# Day 1 | Trailing Zeros

**Mubashir** needs your help to find out trailing zeros after calculating factorial of a given number.

Create a function which takes a number `$n` and calculates the **number of trailing zeros** in factorial of the given number.

    n! = 1 _ 2 _ 3 _ ... _ n

## Examples

    trailingZeros(0) ➞ 0
    // 0! = 1
    // No trailing zero.

    trailingZeros(6) ➞ 1
    // 6! = 120
    // 1 trailing zero.

    trailingZeros(1000) ➞ 249
    // 1000! has 249 trailing zeros.

## Notes

Hint: No need to calculate the factorial (because it won't help). Find another way to find the number of zeros.

## Challenge-Info

Date: 2024-11-22

Origin: [edabit.com](https://edabit.com/challenge/E4D7miJs5QMAeDqTj)

## My thoughts

When looking at a table of factorial numbers (e.g. https://www.wackerart.de/mathematik/big_numbers/factorial_table.html) at first glance it appears, the number of trailing zeros increases by one every time the given number is dividable by 5, and increases by two when it's dividable by 25.

Test failed with trailingZeros(1000), so there must be something missing.

... the number of zeros increases every 5<sup>n</sup>
