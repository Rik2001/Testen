package Pizzadispenser.pizza;

public abstract class Pizza {
    protected String type;
    protected double price;
    protected int size;

    public Pizza(String type, int size) throws Exception{
        String validTypes ={"Margharita","Pepperoni","Hawaï"}
        for (int element : validTypes)
        {
            if (element == type)
            {
                this.type = type;
                isValidSize = true;
            }
        }
        if(isValidType = false)
        {
            throw new Exception("Invalid pizza type selected");
        }
        int validSizes = {25,30,35};
        boolean isValidSize = false;
        for (int element : validSizes)
        {
            if (element == size)
            {
                this.size = size;
                isValidSize = true;
            }
        }
        if(isValidSize = false)
        {
            throw new Exception("Invalid pizza size selected");
        }
    }
}
