This version of the WIT task was designed to test a sequential priming paradigm on MTurk. The timing parameters are copied here for convenience, but can be seen in the seqprime file. These were a response to the first version, which showed that people made a lot of errors and generally did not show bias. We are going with a 700 ms response window, for example, to allow them to perform the task with more accuracy.

In addition, the requirement of a keypress to advance the trial changed. In the previous version, participants were required to press the spacebar if the made an error or if they timed out. In this version, they are only required to press the spacebar on timeouts. Their response is recorded until the trial advances. We are hoping that this less rythm-interrupting paradigm again promotes better data.

The target stimuli used here are larger in size by a little bit. I took them from 250x250 to 300x300.

I also updated some of the CSS. The jspsych-5.0.3 folder includes, notably, a couple of plugin files that I have heavily modified, and some css that wasn't part of the original. Jspsych itself has since been developing, and I tried to take some critical things from there and update it. The window should now flex to accomodate displays of different sizes to some degree. Stimulus sizes are fixed, but hopefully the key labels will now always be visible.

Task parameters:

- 400 ms mask
- 200 ms prime presentation
- 200 ms target presentation
- 500 ms mask, resulting in a 700 ms response window from stimulus onset
- 800 ms iti (unchanged from previous version)
- Error feedback is a red X
- Timeout feedback is the image "TooSlow.png"
- Feedback is shown only on incorrect and timeout trials for 1000ms
