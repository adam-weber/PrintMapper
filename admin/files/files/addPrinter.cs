namespace addPrinter {
  class Program {
    static void Main(string[] args) {
      if (args.Length > 0) {
        try {
          System.Diagnostics.Process.Start(new System.Diagnostics.ProcessStartInfo() {
            FileName = args[0],
            UseShellExecute = true,
            Verb = "open"
          });
        } catch {
          System.Console.WriteLine("Printer could not be found.");
          System.Console.ReadLine();
          System.Environment.Exit(0);
        }
      } else {
        System.Console.WriteLine("No printer provided.");
        System.Console.ReadLine();
        System.Environment.Exit(0);
      }
    }
  }
}