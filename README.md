# Addon-Console-Delay

## What is the Console Delay Addon?

The Console Delay Addon enables a graph to be shown inside a popup modal in replacment of just the current console delay *MS* in text.

Example: http://i.liam.systems/001126d1e4.png

This addon needs no extra programs installed and simply goes on top of your current templete/theme. 

## Installation

When replacing a line, the number is rough as each templete or update could change the line by a few or more.

1) Add the code below into `views/templetes/default/server/console.php` replacing line 81* or CTRL + F `console-delay`

```
<div class="panel-heading">Console Delay: 
  <span class="pull-right" onclick="open_delay();">Click To View</span>
</div>
```

2) Add the code in the file `modal.php` below line 135* or CTRL + F `minecraft_eula` and place it above.

3) Add the code below into `views/templetes/default/server/console.php` just before `</script>` on line 281* 

```
// Add Delay data to the chart.
function addon_delay_data(data = 10) {
    for (i = 0; i < 10; i++) {
        if (i == 9) {
            myChart.data.datasets[0].data[i] = myChart.data.datasets[0].data[i + 1] = data;
        } else {
            myChart.data.datasets[0].data[i] = myChart.data.datasets[0].data[i + 1];
        }
    }
    myChart.update();
}
```

4) Add the code below into `assets/templetes/default/js/console.js` just after `console-jar` on lines 117* & 138*

```
// Update Delay Addon.
addon_delay_data(json.consoledelay);
```
