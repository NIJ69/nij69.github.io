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

# Card constants
suit_tuple = ("Spades", "Hearts", "Clubs", "Diamonds")
rank_tuple = (
    "Ace",
    "2",
    "3",
    "4",
    "5",
    "6",
    "7",
    "8",
    "9",
    "10",
    "Jack",
    "Queen",
    "King",
)

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

score = 50

while True:
    print()
    game_deck_list = shuffle(starting_deck_list)
    current_card_dict = get_card(game_deck_list)
    current_card_rank = current_card_dict["rank"]
    current_card_value = current_card_dict["value"]
    current_card_suit = current_card_dict["suit"]
    print(f"Starting card is: {current_card_rank} of {current_card_suit}")
    print()

    for card_number in range(0, ncards):
        answer = input(
            "Will the next card be higher or lower than the "
            + current_card_rank
            + " of "
            + current_card_suit
            + "? (enter h or l): "
        )
        answer = answer.casefold()
        next_card_dict = get_card(game_deck_list)
        next_card_rank = next_card_dict["rank"]
        next_card_value = next_card_dict["value"]
        next_card_suit = next_card_dict["suit"]
        print(f"Next card is: {next_card_rank} of {next_card_suit}")

        if answer == "h":
            if next_card_value > current_card_value:
                print("You got it right!")
                score += 20
            else:
                print("Oops, you are wrong!")
                score -= 15
        elif answer == "l":
            if next_card_value < current_card_value:
                print("You got it right!")
                score += 20
            else:
                print("Oops, you are wrong!")
                score -= 15

        print("Your score is:", score, end="\n\n")

        current_card_rank = next_card_rank
        current_card_value = next_card_value
        current_card_suit = next_card_suit

    go_again = input("To play again, press ENTER, or 'q' to quit: ")
    if go_again == "q":
        break

print("OK BYE!!")

```

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
