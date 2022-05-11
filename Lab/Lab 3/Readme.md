[![hsla.jpg](https://i.postimg.cc/m2f3q007/hsla.jpg)](https://postimg.cc/mhjF16Zr)


Color
- Colors plays an important role in web development as it is one of the method responsible for making the web site / pages visually appealing to the user. We can set colors of the text or the background to decore the site. We can set colors using different form of color-values in css for html elements, and they are listed below :
Color-Value
1. Keyword
- Keywords are case-insensitive identifiers that represents a specific color, such as red, blue, black, or white.
- All the colors represented through keywords are plain, solid colors without transparency.
- Beside color keywords, other keywords such as 'transparent' can be to create a wholly transparent color, 'currentColor' that can be used to represent the value of an element's color property lets us use the color value on properties that do not receive it by default.
- We don't tend to use keywords for color property's value, keywords can not provide wide varity of different of shades of color of same type that other form of color-value can provide.
Example
.text-color {
    color : red;
}

.bg-color {
    background-color : blue;
}
2. Hexadecimal Color-Value
- This value consist of a hash symbol followed by six hexadecimal numbers, each of which can take one of 16 values between 0 and f (0123456789abcdef).
  Syntax : #RRGGBB
- Each pair of values represents one of the channels : RR (red), GG (green) and BB (blue), and allows us to specify any of the 256 available values for each pair.
- This value method is a bit more complex than keywords, but it makes up for it's shortcoming through it's versility.
Example
.text-color {
    color : #02798b;
}

.bg-color {
    background-color : #c55da1;
}
3. RGB and RGBA Color-Value
- These two are other color-value forms.
- RGB value is a function which is takes three parameters that represent the red, green, and blue channel values of the colors, in much the same way as hex values.
   Syntax : rgb( 0-255 for red channel, 0-255 for green channel, 0-255 for blue channel)
- The difference of RGB with hex-value is that each channel is represented by decimal number between 0 and 255 instead of two hex digits.
- RGBA value is same as RGB value but with addition of fourth parameter/value that represents the alpha channel of the color which controls opacity.
  Syntax : rgba( 0-255 for red channel, 0-255 for green channel, 0-255 for blue channel, 0-1 for opacity)
- It is much easier to understand than hex-valuex.
Example
.text-color {
    color : rgb(2, 121, 139);
}

.text-color {
    color : rgba(2, 121, 139, .3);
}

.bg-color {
    background-color : rgb(18, 138, 125);
}

.bg-color {
    background-color : rgba(18, 138, 125, .6);
}
4. HSL and HSLA Color-Value
- These form color-values are widely uesd by the developers these days.
- Similar to RGB, HSl takes three parameters but instead of red, green and blue values, the hsl function accepts hue, saturation and lightness values, which are used to distinguish between the 16.7 million colors.
   Syntax : hsl( 0-360 for hue/base shade, 0-100% for saturation, 0-100% for lightness)
Hue = It is the base shade of the color. This takes a value between 0 and 360, representing the angles around a color wheel.
Saturation = It is used to set the saturation of the color. This takes value in the form of percentage ranging from 0 - 100%, where 0 is no color (it will appear as a shade of grey), and 100% is full color saturation
Lightness = It is used to set brightness of the color. Similar to saturation , this takes value in the form of percentage ranging from 0 - 100%, where 0 is no light (it will appear completely black) and 100% is full light (it will appear completely white)
Similarly, HSLA is same as HSL but with additional fourth value that represents the alpha channel of the color which controls opacity.
   Syntax : hsla( 0-360 for hue/base shade, 0-100% for saturation, 0-100% for lightness, 0-1 for opacity)
Example
.text-color {
  color : hsl(188, 97%, 28%);
}

.bg-color {
  background-color : hsl(321, 47%, 57%);
}

.text-color {
  color : hsla(188, 97%, 28%, .3);
}

.bg-color {
  background-color : hsla(321, 47%, 57%, .7);
}
