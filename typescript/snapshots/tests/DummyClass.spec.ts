import DummyClass from "../app/DummyClass";

describe('DummyClass', () => {
  it('greets', () => {
      const names = ['A', 'B', 'C', 'D', 'E'];

      let result = '';

      names.forEach(name => {
        const dummy = new DummyClass(name);
        result += dummy.greet();
      })

      expect(result).toMatchSnapshot();
  });
});