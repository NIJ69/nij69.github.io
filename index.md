# Data Analyst & Python Developer

Hello there!! Welcome to my workspace.

## Education
Physics at Marmara University

### Work Experience
- Really!

### Projects
- What projects should I add here?

### Publications
1. [Let's learn **Pandas**](/_posts/2012-09-12-how-to-write-a-blog.md)
2. [Let's learn **Numpy**](www.nijobair.com)
3. Let's learn `Matplotlib`
4. Let's learn `SQL`

```py
# HigherOrLower

import random

ncards = 8

# Pass in a deck and this function returns a random card from the deck
def get_card(deck_list_in):
    this_card = deck_list_in.pop()
    return this_card

# Pass in a deck and this function returns a shuffled copy of the deck
def shuffle(deck_list_in):
    deck_list_out = deck_list_in.copy()
    random.shuffle(deck_list_out)
    return deck_list_out

# Main code
print("Welcome to Higher or Lower.")
print(
    "You have to choose whether the next card to be shown will be higher or lower than the current card."
)
print("Getting it right adds 20 points; get it wrong and you lose 15 points.")
print("You have 50 points to start.")
print()

starting_deck_list = []
for suit in suit_tuple:
    for this_value, rank in enumerate(rank_tuple):
        card_dict = {"rank": rank, "suit": suit, "value": this_value + 1}
        starting_deck_list.append(card_dict)

print("OK BYE!!")
```
<div>
<table>
<tr><th>df Before</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><th>df After</th></tr>
<tr><td markdown="1">

|            |   A |   B |   C |   D |   E |
|------------|-----|-----|-----|-----|-----|
| Physics    |  89 |  69 |  76 |  69 |  89 |
| Chemistry  |  78 |  71 |  65 |  71 |  78 |
| Calculus   |  75 |  88 |  80 |  88 |  75 |
| Biology    |  90 |  73 |  84 |  73 |  90 |
| Literature |  67 |  93 |  78 |  93 |  67 |
| Nothing    |  99 |  87 |  77 |  87 |  99 |

</td><td></td><td markdown="1">

|            |   A |   B |   C |   D |   E |
|------------|-----|-----|-----|-----|-----|
| Physics    |  89 |  69 |  76 |  69 |  89 |
| Chemistry  |  78 |  71 |  65 |  71 |  78 |
| Calculus   |  75 |  88 |  80 |  88 |  75 |
| Biology    |  90 |  73 |  84 |  73 |  90 |
| Literature |  67 |  93 |  78 |  93 |  67 |
| Nothing    |  99 |  87 |  77 |  87 |  99 |

</td></tr>
</table>
</div>

![Picture](./assets/images/trials.png)
![Picture](./assets/images/octocat-2x.png)

[Here is another page!](trial.md)