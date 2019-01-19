# Captain log: first day of our experiment

So it happened, I was bored enough to finally start working on sample pet project which will not use ORM (and for which Event Sourcing is overhead).

So.. there are multiple statements which I want to test:

 - ORM like Doctrine is very useful for simple CRUD-like projects
 - It's easier to use ORM for API (I only working with APIs for the last 5 years)

Let's limit ourselves with just these two statements for the beginning. This is just day 1 of our experiment.

## What we are gonna build?

So we need a very primitive application, something like a blog but maybe a bit fancier. Instagram clone for example. Just as a playground.

So we need to have several requirements:

 - Users should be able to upload photos of their food and stuff
 - Other people should be able to react on these photos (just to have more fun we will only have dislikes and neutral reaction (nobody cares))
 - Comments, there always should be a place where someone could throw some hate on other users.
 - If we will go to AppStore we will also need a system of complaints. For all user-generated content.
 - And since I don't want to store everything forever (storage is cheap, but I don't want to pay for it at all), we could remove photos after some period of time. Like... 24 hours.

And I also want to use this playground for other experiments. Like... let's use spiral/roadrunner instead of php-fpm/nginx. And lets our application will not die after a request was processed. 

So, see you next week.

