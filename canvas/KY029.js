class KY029{
    constructor(ctx, GND = false, RED = 0, GREEN = 0, X = 0, Y = 0){
        this.draw(ctx, this.setState(ctx), X, Y);
    }
    
    draw(ctx, color, X = 0, Y = 0){
        this.color = color;
        this.X = X;
        this.Y = Y;
        ctx.fillStyle = "#303030";
        ctx.fillRect(this.X + 20, this.Y + 10, 100, 75);
        ctx.fillStyle = "#909090";
        ctx.fillRect(this.X + 0, this.Y + 25, 30, 5);
        ctx.fillRect(this.X + 0, this.Y + 45, 30, 5);
        ctx.fillRect(this.X + 0, this.Y + 65, 30, 5);

        ctx.fillRect(this.X + 70, this.Y + 25, 60, 5);
        ctx.fillRect(this.X + 70, this.Y + 45, 60, 5);
        ctx.fillRect(this.X + 70, this.Y + 65, 60, 5);
        ctx.fillStyle = color;
        ctx.fillRect(this.X + 130, this.Y + 20, 10, 55);
        ctx.fillRect(this.X + 130, this.Y + 30, 50, 35);
    }

    setState(ctx, GND = false, RED = 0, GREEN = 0){
        this.GND = GND;
        this.RED = RED;
        this.GREEN = GREEN;
        this.ctx = ctx;
        this.A=(this.RED==1)?"FF":"00";
        this.B=(this.GREEN==1)?"FF":"00";
        this.res=(this.GND==true)?"#" + this.A + this.B + "00":"#000000";

        this.draw(this.ctx, this.res, this.X, this.Y)
        return this.res;
        
    }

    

}